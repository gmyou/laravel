<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return __METHOD__ . ' Article 컬렉션 조회';
    }

    public function create()
    {
        return __METHOD__ . ' Article 컬렉션 생성폼';
    }

    public function store(Request $request)
    {
        return __METHOD__ . ' Article 컬렉션 생성';
    }

    public function show($id)
    {
        return __METHOD__ . ' Article 컬렉션 조회'.$id;
    }

    public function edit($id)
    {
        return __METHOD__ . ' Article 컬렉션 수정폼';
    }

    public function update(Request $request, $id)
    {
        return __METHOD__ . ' Article 컬렉션 수정';
    }

    public function destroy($id)
    {
        return __METHOD__ . ' Article 컬렉션 삭제'.$id;
    }
}
