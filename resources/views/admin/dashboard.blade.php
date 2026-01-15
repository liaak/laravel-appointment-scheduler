<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 24px;
        }

        .container {
            max-width: 1400px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            border: none;
        }



        .btn-icon {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-edit {
            background-color: #2196f3;
            color: white;
        }

        .btn-edit:hover {
            background-color: #1976d2;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        .btn-delete:hover {
            background-color: #d32f2f;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            overflow-y: auto;
        }

        .modal-content {
            background-color: white;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .close {
            font-size: 28px;
            font-weight: bold;
            color: #999;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close:hover {
            color: #333;
        }

        table {
            width: 100%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
            transition: background-color 0.2s;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 600;
            color: #333;
            margin-bottom: -10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="email"],
        textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            font-family: inherit;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(102, 126, 234, 0.3);
        }

        .filter-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        .filter-group input[type="date"] {
            padding: 8px 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .filter-group span {
            color: white;
        }



    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
        <form method="GET" action="{{ route('admin') }}" class="filter-group">
            <span>Date:</span>
            <input type="date" name="date_from" value="{{ request('date_from') }}" placeholder="From">
            <span>-</span>
            <input type="date" name="date_to" value="{{ request('date_to') }}" placeholder="To">
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
    <div class="container">
        @if($appointments->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Hour</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{$appointment -> date}}</td>
                            <td>{{$appointment -> time}}</td>
                            <td>{{$appointment -> name}}</td>
                            <td>{{$appointment -> phone}}</td>
                            <td>{{$appointment -> email}}</td>
                            <td>{{$appointment -> message}}</td>
                            <td>
                                <div class="actions">
                                    <button class="btn-icon btn-edit" onclick="editAppointment({{ $appointment->id }})">✏️</button>
                                    <button class="btn-icon btn-delete" onclick="deleteAppointment({{ $appointment->id }})">🗑️</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div style="padding: 40px; text-align: center; color: #999;">
                <p>No results found.</p>
            </div>
        @endif
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Appointment</h2>
                <span class="close" onclick="closeEditModal()">&times;</span>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                    <label for="hour">Hour</label>
                    <input type="time" name="hour" id="hour">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    <label for="notes">Message</label>
                    <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn">Save</button>
                </form>
            </div>


        </div>


    </div>

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        async function editAppointment(id) {
            try {
                const response = await fetch(`{{ url('/admin/appointments') }}/${id}`);
                const data = await response.json();

                document.getElementById('id').value = data.id;
                document.getElementById('date').value = data.date;
                document.getElementById('hour').value = data.time;
                document.getElementById('name').value = data.name;
                document.getElementById('phone').value = data.phone;
                document.getElementById('email').value = data.email;
                document.getElementById('notes').value = data.message || '';


                document.getElementById('editModal').style.display = 'block';
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to load appointment data');
            }
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        async function deleteAppointment(id) {
            if (!confirm('Are you sure you want to delete this appointment?')) {
                return;
            }

            try {
                const response = await fetch(`{{ url('/admin/appointments') }}/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                const data = await response.json();

                if (data.success) {
                    alert('Appointment deleted successfully');
                    location.reload();
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to delete appointment');
            }
        }


        document.getElementById('editForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const id = document.getElementById('id').value;
            const formData = {
                date: document.getElementById('date').value,
                time: document.getElementById('hour').value,
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                message: document.getElementById('notes').value
            };

            try {
                const response = await fetch(`{{ url('/admin/appointments') }}/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (data.success) {
                    alert('Appointment updated successfully');
                    closeEditModal();
                    location.reload();
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to update appointment');
            }
        });


        window.onclick = function(event) {
            const modal = document.getElementById('editModal');
            if (event.target === modal) {
                closeEditModal();
            }
        }

    </script>

</body>
