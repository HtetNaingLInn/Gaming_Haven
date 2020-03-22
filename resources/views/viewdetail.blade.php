@extends('layout.master')

@section('title')
    {{$post->name }}
@endsection

@section('content')
   <div class="container mt-3">
       <hr>
       <div class="col-md-12">
       <a href="{{url('/')}}"> <button class="btn btn-outline-dark text-success my-2">Back</button></a>
       </div>
       <hr>
       <div class="row">
           <div class="col-md-4">
           <img src="{{asset('/upload/'.$post->img)}}" class="img img-thumbnail bg-dark w-100" alt="">
           </div>
           <div class="col-md-8">
               <div class="container">
                   <div class="row">
                <h3>   {{ $post->title }}</h3>
                <i class="ml-5 text-danger">Price {{ $post->price }}$</i>
            </div>
                <button class="from form-control btn btn-outline-dark text-success my-2"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cart</button>
               </div>
            <h3 class="text-success">Description</h3>
           <p class="text text-justify">{{$post->description}}</p>
           <iframe width="725" height="408" 
            src="{{$post->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>  
           </div>
       </div>
   </div>
   <hr>
   <div class="footer container-fluid ">
    <div class="col-md-12">
        <h4 class="text-success text-center">How About PS4 Digital Games?</h4>
        <p class="text text-center">PS4 Digital Games မ်ားသည္ physical Disc,မိမိအေကာင့္ထဲမွာ gift card ဝယ္ၿပီး ဂိမ္းဝယ္ေဆာ့သလိုပဲျဖစ္သည္.မိမိအေကာင့္ထဲမွာပဲ trophies ရရွိမည္ျဖစ္သည္.တစ္ခါသြင္းၿပီးေနာက္တစ္ႀကိမ္ထပ္သြင္းလည္း အရင္ဂိမ္းမ်ား ထိခိုင္မူွမရွိ.Fifa UT,PES online,PUBG,အစရွိေသာ ဂိမ္းမ်ား အြန္လိူင္းခ်ိတ္ကစားႏိုင္.online Games မ်ားအတြက္ after sale service ရွိပါတယ္.</p>
    </div>
    <hr class="site-footer__hr">
    <div class="page-width">
        <div class="grid grid--no-gutters small--text-center">
          <div class="grid__item one-half small--one-whole"><div class="small--hide text-center">
                <small class="site-footer__copyright-content">&copy; 2020 Gaming Haven Store Powered by HNL</small>
                
              </div></div>
        </div>
@endsection