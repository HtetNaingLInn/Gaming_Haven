@extends('layout.master')

@section('title','home')
@section('content')
<div class="container fluid">
<hr color="success">

<div class="form-group form-check-inline">
    <label for="exampleFormControlSelect1" class="text-info">Search By Category</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <option value="">All Post</option>
        @foreach ($cats as $cat)
            
    
    <option value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>
  </div>

<hr color="success">


    <div class="row mt-3">
        @foreach ($posts as $post)
        <div class="item col-lg-3 col-md-6 mt-5">
            <div class="thumbnail card  border-success">
                <div class="card header">
              <a href=""> <img class="img img-thumbnail bg-dark" src="{{asset('/upload/'.$post->img)}}" alt="" />
              </a> 
            </div>
                
                <div class="caption card-footer ">
                    <div class="row">
                    <div class="col-md-6 sm-6">
                    <h5 class="text-success">
                    {{$post->price}}$</h5>
                </div>
                <div class="col-md-6 sm-6">
                    <button class="btn btn-outline-dark text-success float-right">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endforeach
    <div class="col-12 pagination justify-content-center mt-3">
        {{ $posts->links() }}
    </div>

</div>
<hr color=success>
<div class="footer container-fluid ">
    <div class="col-md-12">
        <h4 class="text-success text-center">How About PS4 Digital Games?</h4>
        <p class="text text-center">PS4 Digital Games မ်ားသည္ physical Disc,မိမိအေကာင့္ထဲမွာ gift card ဝယ္ၿပီး ဂိမ္းဝယ္ေဆာ့သလိုပဲျဖစ္သည္.မိမိအေကာင့္ထဲမွာပဲ trophies ရရွိမည္ျဖစ္သည္.တစ္ခါသြင္းၿပီးေနာက္တစ္ႀကိမ္ထပ္သြင္းလည္း အရင္ဂိမ္းမ်ား ထိခိုင္မူွမရွိ.Fifa UT,PES online,PUBG,အစရွိေသာ ဂိမ္းမ်ား အြန္လိူင္းခ်ိတ္ကစားႏိုင္.online Games မ်ားအတြက္ after sale service ရွိပါတယ္.</p>
    </div>
    <hr class="site-footer__hr">
    <div class="page-width">
        <div class="grid grid--no-gutters small--text-center">
          <div class="grid__item one-half small--one-whole"><div class="small--hide">
                <small class="site-footer__copyright-content">&copy; 2020,Gaming Haven Store</small>
                
              </div></div>
@endsection
