<div class='head'>
    {{$post->title}}
</div>  
<div class='body'>
    {!!$post->description!!} <br><br>Marketing Ablelink: {{$post->created_at}}
</div>

<style>
    .head{
        text-align: center;
        font-size: 50px;
        margin-top:3%; 
    }
    .body{
        margin: 5% 20% 5% 20%;
    }
</style>