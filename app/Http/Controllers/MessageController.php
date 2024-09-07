<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message): void
    {
        //
    }
}
