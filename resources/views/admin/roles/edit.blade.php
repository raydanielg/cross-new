@extends('adminlte::page')

@section('title', 'Edit Role | CTCMS')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Role: <span class="text-primary">Super Admin</span></h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.roles') }}" class="btn btn-default"><i class="fas fa-times"></i> Cancel</a>
                <button class="btn btn-success"><i class="fas fa-save"></i> UPDATE ROLE</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- LEFT COLUMN: BASIC INFO & ASSIGNED USERS -->
            <div class="col-md-4">
                <!-- BASIC INFORMATION -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-info-circle mr-1"></i> BASIC INFORMATION</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" value="Super Admin">
                        </div>
                        <div class="form-group">
                            <label>Display Name</label>
                            <input type="text" class="form-control" value="Super Administrator">
                        </div>
                        <div class="form-group">
                            <label>Role Level</label>
                            <select class="form-control">
                                <option selected>Level 5 - Root Access</option>
                                <option>Level 4 - Senior Access</option>
                                <option>Level 3 - Management</option>
                                <option>Level 2 - Staff</option>
                                <option>Level 1 - Participant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="active" name="status" checked>
                                <label for="active" class="custom-control-label">Active</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="inactive" name="status">
                                <label for="inactive" class="custom-control-label">Inactive</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3">Full system access, can manage all users, settings, and backups</textarea>
                        </div>
                    </div>
                </div>

                <!-- ASSIGNED USERS -->
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-users mr-1"></i> ASSIGNED USERS</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Users with this role: <b>1</b></p>
                        <div class="p-2 border rounded bg-light mb-3">
                            <div class="media">
                                <img src="https://via.placeholder.com/40" class="mr-3 img-circle shadow-sm" alt="User Image">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-0">John Mbowe</h6>
                                    <small class="text-muted">john@ctcms.tz</small><br>
                                    <small class="badge badge-success">Online</small>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-block btn-sm"><i class="fas fa-plus"></i> Assign New User</button>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: PERMISSIONS GRID -->
            <div class="col-md-8">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-shield-alt mr-1"></i> PERMISSIONS (8 Categories)</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @php
                                $categories = [
                                    ['name' => 'USER MANAGEMENT', 'icon' => 'fa-users-cog', 'perms' => ['view_users', 'create_user', 'edit_user', 'delete_user', 'suspend_user', 'approve_user', 'assign_role', 'view_activity']],
                                    ['name' => 'EVENT MANAGEMENT', 'icon' => 'fa-calendar-alt', 'perms' => ['view_events', 'create_event', 'edit_event', 'delete_event', 'cancel_event', 'approve_event', 'view_all_events', 'assign_organizer']],
                                    ['name' => 'REGISTRATION MANAGEMENT', 'icon' => 'fa-id-card', 'perms' => ['view_regs', 'approve_reg', 'reject_reg', 'cancel_reg', 'checkin_participant', 'bulk_import', 'export_regs', 'gen_qrcode']],
                                    ['name' => 'PAYMENT MANAGEMENT', 'icon' => 'fa-money-bill-wave', 'perms' => ['view_payments', 'process_payment', 'approve_pay', 'refund_payment', 'generate_invoice', 'view_financials', 'manage_methods']],
                                    ['name' => 'CONTENT MANAGEMENT', 'icon' => 'fa-newspaper', 'perms' => ['view_blog', 'create_post', 'edit_post', 'delete_post', 'publish_post', 'mod_comments', 'manage_gallery', 'announcements']],
                                    ['name' => 'SPONSOR MANAGEMENT', 'icon' => 'fa-handshake', 'perms' => ['view_sponsors', 'add_sponsor', 'edit_sponsor', 'delete_sponsor', 'approve_sponsor', 'manage_contracts', 'view_partners']],
                                    ['name' => 'VOLUNTEER MANAGEMENT', 'icon' => 'fa-hands-helping', 'perms' => ['view_volunteers', 'add_volunteer', 'assign_role', 'track_attendance', 'generate_certs', 'send_thankyou']],
                                    ['name' => 'SYSTEM MANAGEMENT', 'icon' => 'fa-cogs', 'perms' => ['view_settings', 'edit_settings', 'manage_backup', 'view_logs', 'manage_roles', 'manage_perms', 'clear_cache', 'system_update']]
                                ];
                            @endphp

                            @foreach($categories as $category)
                            <div class="col-md-6 mb-4">
                                @include('admin.roles.partials.permission-group', ['category' => $category])
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop