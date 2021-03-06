<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('GPE') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                            {{ __('Personnel') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <i class="nc-icon nc-satisfied"></i>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'personnels') }}">
                                <i class="nc-icon nc-briefcase-24"></i>
                                <span class="sidebar-normal">{{ __(' Personnel Management ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('file.import-export', 'plannings') }}">
                                <i class="nc-icon nc-tile-56"></i>
                                <span class="sidebar-normal">{{ __(' Planning ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="{{ $elementActive == 'Biometric Devices' || $elementActive == 'enrollment' ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples2">
                        <i class="nc-icon nc-touch-id"></i>
                        <p>
                                {{ __('Biometric Devices') }}
                            <b class="caret"></b>
                        </p>
                    </a>

             <div class="collapse show" id="laravelExamples2">
                                    <ul class="nav">
                                        <li >
                                            <a href="{{ route('finger.index'),'fingerDevices' }}">
                                                <i class="nc-icon nc-tap-01"></i>
                                                <span class="sidebar-normal">{{ __(' Enrollment ') }}</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="{{ route('attendance.index'),'attendances' }}">
                                                <i class="nc-icon nc-tap-01"></i>
                                                <span class="sidebar-normal">{{ __(' Attendance ') }}</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
            {{-- <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>--}}
        </ul>
    </div>
</div>
