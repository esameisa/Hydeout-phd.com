<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EventsRepository;
use DB;

class EventsController extends Controller
{
    protected $eventsRepository;

    public function __construct(EventsRepository $eventsRepository)
    {
        $this->eventsRepository = $eventsRepository;
    }

    public function getEventsDatesByMonth(Request $request)
    {
        $year = $request->year ? $request->year : Date('Y');
        $where = [
            [DB::raw('MONTH(date)'), '=', $request->month],
            [DB::raw('YEAR(date)'), '=', $year],
        ];
        $events = $this->eventsRepository->all();

        foreach ($events as $key => $value) {
            $eventsArr[$key]['title'] = $value->title;
            $eventsArr[$key]['content'] = $value->content;
            $eventsArr[$key]['date'] = $value->date;
            $eventsArr[$key]['image'] = $value->image->url('medium');
        }


        return response()->json($eventsArr, 200);
    }

    public function getEventByDate(Request $request)
    {
        $date = $request->get('date');
        $event = $this->eventsRepository->findWhere(['date' => $date])->first();

        if ($event) {
            $event_response = [
                'title' => $event->title,
                'content' => $event->content,
                'date' => $event->date,
                'image' => $event->image->url('medium'),
                'gallery_id' => ($event->gallery) ? $event->gallery->id : null
            ];
        } else {
            return null;
        }

        return response()->json($event_response, 200);
    }

    public function show($id)
    {
        $event = $this->eventsRepository->find($id);

        $event_response = [
            'title' => $event->title,
            'content' => $event->content,
            'date' => $event->date,
            'image' => $event->image->url('medium'),
        ];

        return response()->json($event_response, 200);
    }
}
