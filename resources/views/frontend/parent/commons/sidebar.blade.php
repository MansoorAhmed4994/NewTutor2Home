<div class="left col-sm-4 col-lg-3">
    <div id="sidebar">
        <div class="sidebar__inner">
            <div class="tablist">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  active " id="three-tab" href="{{ route('parent-dashboard') }}" aria-controls="three" aria-selected="false"><span style="background-image: url({{asset('front/img/logo/list-icn9-active.png')}})" class="icn nine"></span>
                        Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " id="one-tab" href="{{ route('parent-profile') }}" aria-selected="true"><span style="background-image: url({{asset('front/img/logo/list-icn.png')}})" class="icn"></span> Your
                        Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="one-tab" href="{{ route('parent-change-password') }}" aria-selected="true"><span class="custom-icn"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span> Change
                        Password</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <a class="nav-link" id="nine-tab" href="javascript:void(0);" role="tab" aria-controls="nine" aria-selected="false" onclick="$(this).closest('form').submit();"><span style="background-image: url({{asset('front/img/logo/list-icn8.png')}})" class="icn eight"></span>Logout</a>
                        </form>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>                
</div>