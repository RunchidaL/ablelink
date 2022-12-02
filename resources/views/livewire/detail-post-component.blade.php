<div class='head'>
    {{$post->title}}
</div>  
<div class='body'>
    {!!$post->description!!} <br><br>By Marketing Ablelink: {{$post->created_at}}
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
    img{
        width: 100% !important;
    }

    @media(max-width: 767px){
        .head{
        text-align: center;
        font-size: 35px;
        margin: 3% 3% 3% 3%; 
        }
        .body{
        margin: 5% 5% 5% 5%;
        }
}
</style>