<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        @livewireStyles()
        
        <style>
            .active{
                color:blue !important;
            }
        </style>
        @stack('head')
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav">
                                <li class="nav-item">
                                  <a class="nav-link active" id="userTab" style="cursor:pointer;">Users</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="postTab" style="cursor:pointer;">Posts</a>
                                </li>
                              </ul>
                        </div>
                        <div class="card-body">
                            <div id="userBody">
                                <livewire:user-table :id_s="$id_s" >
                            </div>
                            <div id="postBody" style="display: none;">
                                <livewire:post-table >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        @livewireScripts()

        <script>
            $(document).ready(function(){
                $('#userTab').on('click',function(){
                    $('#postBody').hide();
                    $('#userBody').show();
                    $('#postTab').removeClass('active');
                    $('#userTab').addClass('active');
                });
                
                $('#postTab').on('click',function(){
                    $('#userBody').hide();
                    $('#postBody').show();
                    $('#userTab').removeClass('active');
                    $('#postTab').addClass('active');
                });
            });
        </script>
        @stack('script')
    </body>
</html>
