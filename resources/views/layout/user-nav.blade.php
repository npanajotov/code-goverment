<div class="card border-light mb-3">
    <div class="card-header">Navigacija</div>
    <div class="card-body text-secondary">
        <div class="nav flex-column nav-pills">
            {{--<a class="nav-link {{url()->current() == route('dashboard') ? 'active' : ''}}"--}}
            {{--href="{{route('dashboard')}}">--}}
            {{--eUprava--}}
            {{--</a>--}}
            <a class="nav-link {{url()->current()  == route('whoIam') ? 'active' : ''}}" href="{{route('whoIam')}}">
                Ko sam ja?
            </a>
            <a class="nav-link {{url()->current()  == route('profile') ? 'active' : ''}}" href="{{route('profile')}}">
                Profil
            </a>
            <a class="nav-link {{url()->current()  == route('notification') ? 'active' : ''}}"
               href="{{route('notification')}}">
                Obaveštenja
            </a>
            <a class="nav-link {{url()->current()  == route('news') ? 'active' : ''}}" href="{{route('news')}}">
                Vesti
            </a>
            <a class="nav-link {{url()->current()  == route('change-location') ? 'active' : ''}}" href="{{route('change-location')}}">
                eForma
            </a>
            {{--<a class="nav-link {{url()->current()  == route('calendar') ? 'active' : ''}}" href="{{route('calendar')}}">--}}
                {{--Kalendar--}}
            {{--</a>--}}
            <a class="nav-link" href="{{route('logout')}}">Odjava</a>
        </div>
    </div>
</div>
