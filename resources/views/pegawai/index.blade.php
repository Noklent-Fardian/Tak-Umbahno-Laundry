@extends('pegawai.base')

@section('title', 'Dashboard -')

@section('css')
    <link rel="stylesheet" href="{{url('js/perfect-scrollbar/perfect-scrollbar.css')}}">
    <style>
        #todo-card {
            position: relative;
            max-height: 600px;
        }
    </style>
@endsection

@section('content')
    <ul class="nav justify-content-end mb-3">
        <li class="nav-item">
            {{-- <a href="{{route('pegawai.index')}}" class="nav-link disabled">Dashboard</a> --}}
        </li>
    </ul>

    <div class="row">
        <div class="col-md-9">
            <div class="row justify-content-sm-center justify-content-lg-between">

                <div class="col-sm-12 col-md-4">
                    <div class="card shadow border border-cyan rounded-sm-2">
                        <div class="card-body p-md-2">
                            <h5 class="card-title text-gray fw-bold mb-0" style="letter-spacing: 3px">Student</h5>
                            <div class="my-4">
                                {{-- <h1 class="text-light-blue fw-bold mb-0">{{$studentActive}}</h1> --}}
                                <small class="text-gray">Active</small>
                            </div>
                            {{-- <a href="{{route('admin.student.create')}}" class="btn btn-block btn-outline-info">Create</a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card shadow border border-cyan rounded-sm-2">
                        <div class="card-body p-md-2">
                            <h5 class="card-title text-gray fw-bold mb-0" style="letter-spacing: 3px">Employe</h5>
                            <div class="my-4">
                                {{-- <h1 class="text-light-blue fw-bold mb-0">{{$employeeAll}}</h1> --}}
                                <small class="text-gray">All</small>
                            </div>
                            {{-- <a href="{{route('admin.employee.create')}}" class="btn btn-block btn-outline-info">Create</a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card shadow border border-cyan rounded-sm-2">
                        <div class="card-body p-md-2">
                            <h5 class="card-title text-gray fw-bold mb-0" style="letter-spacing: 3px">Blog</h5>
                            <div class="my-4">
                                {{-- <h1 class="text-light-blue fw-bold mb-0">{{$blogAll}}</h1> --}}
                                <small class="text-gray">All</small>
                            </div>
                            {{-- <a href="{{route('admin.blog.create')}}" class="btn btn-block btn-outline-info">Create</a> --}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <div class="card shadow border border-cyan rounded-sm-2 p-md-2">
                        <div class="card-body p-0">
                            <h5 class="text-center text-dark fw-bold">Student</h5>
                            <canvas id="chart-student" height="350px" >
                                
                            </canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card shadow border border-cyan rounded-sm-2 p-md-2">
                        <div class="card-body p-0">
                            <h5 class="text-center text-dark fw-bold">Employee</h5>
                            <canvas id="chart-employee" height="350px" >
            
                            </canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md">
            <div class="card" id="todo-card">
                <div class="card-body border border-cyan rounded-sm-2 p-md-2">
                    <h5 class="card-title text-gray fw-bold mb-0" style="letter-spacing: 3px">Todo</h5>
                    <form action="" id="form-todo">
                        <div class="form-group my-4">
                            <input type="text" name="todo" id="todo" class="form-control disabled" placeholder="Insert Your Todo Here...">
                            <input type="submit" value="Submit" id="submit" class="btn bg-teal border">
                        </div>
                    </form>
                    <ul class="list-group" id="todo-list">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{url("js/chartjs/Chart.min.js")}}"></script>
    <script src="{{url('js/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        const ps = new PerfectScrollbar('#todo-card');
    </script>
    <script>
        let ctx = $('#chart-student');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Active', 'Graduates', 'Drop Out', 'All', 'Male Active', 'Female Active', 'Male All', 'Female All'],
                datasets: [{
                    label: '# of Votes',
                   
                    backgroundColor: [
                        '#14b8a6',
                        '#f97316',
                        '#ef4444',
                        '#8b5cf6',
                        '#06b6d4',
                        '#f43f5e',
                        '#d946ef',
                        '#8b5cf6',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Student'
                    }
                }
            }
        });

       
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: '# of Votes',
                    backgroundColor: [
                        '#0ea5e9',
                        '#f43f5e',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Employee'
                    }
                }
            }
        });
    </script>
    <script>
        const fetchTodo = async () => {
           
        
            const result = await response.json();

           
            if(result.success) {
                let html = '';
                console.log(result.model);
                if (result.model === []) {
                    html = '<h6>You don\'t have any todo yet</h6>';
                    content.html(html);
                } else {
                    html = result.model.map(e => {
                        let {id, todo } = e;
                        return `
                        <li class="list-group-item ">
                            <p>${todo}</p>
                            <a class="btn btn-sm soft-bg-rose border border-rose text-rose w-100" id="delete-btn-${id}">Delete</a>
                        </li>
                        `;
                    });
                }
                content.html(html);
                deleteBtn(result.model);
                $('#todo-list').fadeIn(200);
            }
        }
        fetchTodo();

        const createTodo = () => {
            $('#todo-list').fadeOut(200);
          
            $.post(url, {todo : $('#todo').val()}, (response) => {
                if(response.success) {
                    $('#todo').val('');
                } else {
                    alert(response.message);
                }
                fetchTodo();
                $('#todo-list').fadeIn(200);
                $("#submit").removeAttr('disabled');
            });
        }

        $('#submit').click((e) => {
            e.preventDefault();
            $("#submit").prop("disabled", true);
            createTodo();
        });

        const deleteBtn = (model) => {
                model.map(e => {
                let {id} = e;
                $(`#delete-btn-${id}`).click((e) => {
                    $('#todo-list').fadeOut(200);
                    console.log('click');
                  
                    $.ajax({
                        url : url,
                        method: "DELETE",
                        success : function  (response) {
                            if(response.success) {
                                fetchTodo();
                            } else {
                                alert('An error happen');
                            }
                        },
                        error : function (response) {
                            alert(response.status);
                        }
                    });
                    fetchTodo();
                });
                return true;
            });
        }
    </script>
@endsection