<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeaOfStrangerController extends Controller
{
    const BOOK_NAME ="Sea of Strangers";
	const CHAPTERS = 15;
    const AUTHOR_NAME = "Lang Leav";

	public function index()
	{
		return view('index', [
			'book_name' => static::BOOK_NAME,
			'number_of_chapters' => static::CHAPTERS,
            'author_name' => static:: AUTHOR_NAME
		]);
	}

    public function foreword()
	{
		return view('foreword', [
			'book_name' => static::BOOK_NAME,
			'number_of_chapters' => static::CHAPTERS,
            'author_name' => static:: AUTHOR_NAME
            
		]);
	}



	public function readByChapter($chapter_number)
	{
		return view('read-chapter', [
			'book_name' => static::BOOK_NAME,
			'number_of_chapters' => static::CHAPTERS,
			'chapter_number' => $chapter_number,
            'author_name' => static:: AUTHOR_NAME
            
		]);
	}

	public function readAllChapters()
	{
		return view('all-chapters', [
			'book_name' => static::BOOK_NAME,
			'number_of_chapters' => static::CHAPTERS,
            'author_name' => static:: AUTHOR_NAME
		]);
	}

}
