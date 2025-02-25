<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MoodBoardResult implements FromArray, WithHeadings
{
    use Exportable;
    public $data;

    public function array(): array
    {
        $results = DB::table('results')
            ->join('answers', 'results.answer_id', 'answers.id')
            ->join('respondens', 'results.responden_id', 'respondens.id')
            ->select('respondens.name', DB::raw('IF(results.created_at < "2025-02-22 09:00:00", "PRE TEST", "POST TEST") as subject'), DB::raw('results.created_at as date'), DB::raw('COUNT("results.id") as correct_answers'), DB::raw('(COUNT("results.id") * 12.5) as score'))
            ->where('answers.is_correct', 1)
            ->groupBy('results.responden_id')
            ->groupBy(DB::raw('results.created_at'))
            ->get()->toArray();

        $this->data = $results;

        return $results;
    }

    public function headings(): array
    {
        return [
            'name',
            'subject',
            'date',
            'correct answers',
            'score',
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}
