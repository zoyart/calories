@extends('layouts.layout')

@section('head-title')
    Главная
@endsection


@section('content')
    <div class="container">
        
        
    </div>

@endsection

<script>
    let reqUrl = "http://calories/api/target-date?weight=80&purpose_weight=75&purpose=down";
    
    function sendRequest(method, url) {
        return fetch(url).then(response => {
            return response.text()
        })
    }

    sendRequest('GET', reqUrl)
        .then(data => console.log(data))
        .catch(err => console.log(err))
</script>