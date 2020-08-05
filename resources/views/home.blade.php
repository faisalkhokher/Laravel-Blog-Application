@extends('layouts.app')

@section('content')

           


            <div class="header-container">
                <div class="text   text-center"> <b>DASHBOARD </b></div>
                </div>
<br/>
                <div class="p-3 mb-2 bg-dark text-white"><b>By default you are an Admin , you can remove Admin access in User </b></div>
                
                <div class="blocks wrapper">
                  
                  <div class="block green">
                    <div class="heading">
                    <b>  POSTED </b>
                    </div>
                    <div class="num">{{ $post_count  }}</div>
                  </div>
                  
                  <div class="block orange">
                    <div class="heading">
                        <b>  TRASHED POSTS </b>
                    </div>
                    <div class="num">{{ $trashed_post }}</div>
                  </div>
                  
                  <div class="block purple">
                    <div class="heading">
                        <b>  USERS </b>
                    </div>
                    <div class="num">{{ $users }}</div>
                  </div>
                  
                  <div class="block yellow">
                    <div class="heading">
                        <b>  CATEGORIES </b>
                    </div>
                    <div class="num">{{ $cat }}</div>
                  </div>
                  
                  <div class="block blue">
                    <div class="heading">
                        <b>  TAGS </b>
                    </div>
                    <div class="num">{{ $tag }}</div>
                  </div>
                
                
                </div> <!--Blocks Ends-->
@endsection
