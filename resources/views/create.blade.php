<!DOCTYPE html>
<html>
<head>
    <title>Add Application</title>
</head>

<body style="font-family: Arial; background:#f4f6f9; margin:0; padding:20px;">

<div style="max-width:600px; margin:auto; background:white; padding:25px; border-radius:10px; box-shadow:0 3px 12px rgba(0,0,0,0.1);">

    <h1 style="text-align:center; color:#333;">➕ Add Application</h1>

    <form method="POST" action="{{ route('applications.store') }}">

        @csrf

        <label>🏢 Company Name</label><br>
        <input name="company_name" placeholder="Enter company name"
               style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:5px;"><br>

        <label>💼 Position</label><br>
        <input name="position" placeholder="Enter position"
               style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:5px;"><br>

        <label>📅 Application Date</label><br>
        <input type="date" name="application_date"
               style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:5px;"><br>

        <label>📌 Status</label><br>
        <select name="status"
                style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:5px;">
            <option value="sent">Sent</option>
            <option value="interview">Interview</option>
            <option value="rejected">Rejected</option>
            <option value="accepted">Accepted</option>
        </select><br>

        <label>📝 Notes</label><br>
        <textarea name="notes" placeholder="Write notes..."
                  style="width:100%; padding:10px; margin:8px 0 15px; border:1px solid #ccc; border-radius:5px; height:100px;"></textarea><br>

        <button type="submit"
                style="width:100%; background:#28a745; color:white; padding:12px; border:none; border-radius:5px; font-size:16px; cursor:pointer;">
            Save Application
        </button>

    </form>

</div>

</body>
</html>