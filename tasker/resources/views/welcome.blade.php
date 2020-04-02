<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .frame {
                padding:3px;
            }
            .column {
                width: 46%;
                display: inline-block;
                vertical-align: top;
            }
            .column-left {
                margin: 10px 10px 10px 30px;
            }
            .column-right {
                margin: 10px 30px 10px 10px;
            }
            .column .subhead {
                font-size: 32px;
                font-weight: 700;
            }
            .column div {
                text-align: left;
                padding: 10px 5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Tasker
                </div>

                <div class="frame">
                    <div id="Program_Info" class="column column-left">
                        <div class="subhead">Program Info</div>
                        <div>
                            <b>Tasker</b> is a simple task list tracker, without typical
                            expected features like privacy or data assurance. Nope, not this
                            baby. You can add, edit, update, and delete tasks. You can "start" a task,
                            thus recording the current date as the 'start' date. You can "finish"
                            a started task, thus recording the current date as the 'finish' date. The
                            default view is of the list of all defined tasks.
                        </div>
                        <div>
                            This app was built using the Laravel framework, and runs on Apache httpd 2.4,
                            PHP 7.4, and MySQL 5.5. For more information, see <a href="https://github.com/chrisburton-HCC/Tasker">the github page</a>.

                        </div>
                        <div>
                            <a href="{{ route('tasker.index') }}" class="btn btn-info">Show Task List</a>
                        </div>
                    </div>
                    <div id="Developer_Info" class="column column-right">
                        <div class="subhead">Developer Info</div>
                        <div>
                            This project was created by Christopher Burton of Hill Country Codesmith
                            on special request. Contact Christopher to build your business management
                            app.
                        </div>
                        <div>
                            <ul>
                                <li>Chris Burton</li>
                                <li>512-585-5071</li>
                                <li><a href='mailto:chris@hillcountrycodesmith.com'>chris@hillcountrycodesmith.com</a></li>
                                <li>resume: <a href="http://hillcountrycodesmith.com/resume">http://hillcountrycodesmith.com/resume</a></li>
                                <li>references: <a href="http://hillcountrycodesmith.com/references">http://hillcountrycodesmith.com/references</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
