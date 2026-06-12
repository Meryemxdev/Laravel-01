<!DOCTYPE html>
<html>
<head>
    <title>Job Applications</title>
</head>

<body style="font-family: Arial; background:#f4f6f9; margin:0; padding:20px;">

    <div style="max-width:900px; margin:auto;">

        <h1 style="text-align:center; color:#333;">💼 My Job Applications</h1>

        <div style="text-align:right; margin-bottom:20px;">
            <a href="/applications/create"
               style="background:#28a745; color:white; padding:10px 15px; text-decoration:none; border-radius:5px;">
               + Add New
            </a>
        </div>

        @foreach($applications as $app)
            <div style="
                background:white;
                border-radius:10px;
                padding:15px;
                margin-bottom:15px;
                box-shadow:0 2px 8px rgba(0,0,0,0.1);
                display:flex;
                justify-content:space-between;
                align-items:center;
            ">

                <div>
                    <h3 style="margin:0; color:#222;">{{ $app->company_name }}</h3>
                    <p style="margin:5px 0; color:#555;">{{ $app->position }}</p>

                    <span style="
                        padding:5px 10px;
                        border-radius:20px;
                        font-size:12px;
                        color:white;
                        background:
                            @if($app->status == 'sent') #007bff
                            @elseif($app->status == 'interview') #ffc107
                            @elseif($app->status == 'accepted') #28a745
                            @else #dc3545
                            @endif
                    ">
                        {{ $app->status }}
                    </span>
                </div>

                <form method="POST" action="/applications/{{ $app->id }}">
                    @csrf
                    @method('DELETE')
                    <button style="
                        background:#dc3545;
                        color:white;
                        border:none;
                        padding:8px 12px;
                        border-radius:5px;
                        cursor:pointer;
                    ">
                        Delete
                    </button>
                </form>

            </div>
        @endforeach

    </div>

</body>
</html>