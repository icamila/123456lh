@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }} alert-dismissable"> 
      <a href="#" class="close" data-dismiss="alert" aria-label="close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </a>
      {!! session('message.content') !!}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif