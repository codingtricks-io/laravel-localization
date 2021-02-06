
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                 <ul class="navbar-nav ml-auto">
                     @php $locale = session()->get('locale'); @endphp
                     <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                            @case('us')
                            <img src="{{asset('img/us.png')}}"> English
                            @break
                            @case('fr')
                            <img src="{{asset('img/fr.png')}}"> French
                            @break
                            @case('es')
                            <img src="{{asset('img/es.png')}}"> Spanish
                            @break
                            @case('jp')
                            <img src="{{asset('img/jp.png')}}"> Japanese
                            @break
                            @case('si')
                            <img src="{{asset('img/lk.png')}}"> Sinhala
                            @break
                            @default
                            <img src="{{asset('img/us.png')}}"> English
                            @endswitch
                            <span class="caret"></span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}"> English</a>
                             <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}"> French</a>
                             <a class="dropdown-item" href="lang/es"><img src="{{asset('img/es.png')}}"> Spanish</a>
                             <a class="dropdown-item" href="lang/jp"><img src="{{asset('img/jp.png')}}"> Japanse</a>
                             <a class="dropdown-item" href="lang/si"><img src="{{asset('img/lk.png')}}"> Sinhala</a>
                        </div>
                     </li>
                 </ul>

            </div>
        </nav>
    </div>
</div>
