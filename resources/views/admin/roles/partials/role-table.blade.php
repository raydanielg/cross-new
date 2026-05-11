<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th style="width: 50px">#</th>
            <th>ROLE NAME</th>
            <th>LEVEL</th>
            <th>STATUS</th>
            <th>USERS</th>
            <th style="width: 150px">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @php
            $roles = [
                ['name' => 'Super Admin', 'level' => 5, 'users' => 1, 'color' => 'danger'],
                ['name' => 'Senior Admin', 'level' => 4, 'users' => 3, 'color' => 'warning'],
                ['name' => 'Event Admin', 'level' => 3, 'users' => 7, 'color' => 'info'],
                ['name' => 'Support Admin', 'level' => 3, 'users' => 5, 'color' => 'info'],
                ['name' => 'Organizer', 'level' => 2, 'users' => 12, 'color' => 'primary'],
                ['name' => 'Pro Cyclist', 'level' => 1, 'users' => 45, 'color' => 'secondary'],
                ['name' => 'Amateur Cyclist', 'level' => 1, 'users' => 234, 'color' => 'secondary'],
                ['name' => 'Platinum Sponsor', 'level' => 2, 'users' => 4, 'color' => 'primary'],
                ['name' => 'Volunteer', 'level' => 1, 'users' => 156, 'color' => 'secondary'],
                ['name' => 'Content Editor', 'level' => 2, 'users' => 3, 'color' => 'primary'],
                ['name' => 'Moderator', 'level' => 2, 'users' => 6, 'color' => 'primary'],
                ['name' => 'Guest', 'level' => 0, 'users' => 0, 'color' => 'dark']
            ];
        @endphp
        @foreach($roles as $index => $role)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><b>{{ $role['name'] }}</b></td>
            <td><span class="badge badge-{{ $role['color'] }}">Level {{ $role['level'] }}</span></td>
            <td><span class="badge badge-success">Active</span></td>
            <td>{{ $role['users'] }}</td>
            <td>
                <a href="{{ route('admin.roles.edit', 1) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                <button class="btn btn-sm btn-info" title="View"><i class="fas fa-eye"></i></button>
                <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>