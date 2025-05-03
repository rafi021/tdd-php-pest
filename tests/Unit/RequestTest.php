<?php

use App\Http\Request;

describe('RequestTest', function () {
   it('creates a correctly formed GET Request Object', function () {
        
        // ACT
       $request = Request::create(
            method: 'GET',
            uri: '/api/v1/books?author=white-perl',
            server: [
                'Accept' => 'application/json',
                'CONTENT_TYPE' => 'application/json',
            ],
            content: ''
        );
        // Assert
        expect($request->getQueryParams())
        ->toMatchArray(['author' => 'white-perl'])
        ->and($request->getPath())
        ->toBe('/api/v1/books')
        ->and($request->getMethod())
        ->toBe('GET');

    });
});

