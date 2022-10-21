<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDocumentRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document $testResult
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Document $testResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $testResult
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $testResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentRequest  $request
     * @param \App\Models\Document  $testResult
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentRequest $request, Document $testResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Document  $testResult
     *
     * @return \Illuminate\Http\Response
     */
	public function destroy(Document $testResult)
    {
        //
    }
}
