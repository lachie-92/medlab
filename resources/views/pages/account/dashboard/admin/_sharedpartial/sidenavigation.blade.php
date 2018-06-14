<div class="panel panel-primary medlab_panel">
    <div class="panel-heading medlab_panel_title">
        Administrator
    </div>

    <div class="list-group">
        <a href="/account/patient-registration" class="list-group-item">
            @if ($view_current_page == 'Patient')
                <strong>
            @endif

            @if (count($unapprovedPatientRegistrationList))
                Patient Registration ({{ count($unapprovedPatientRegistrationList) }})
            @else
                Patient Registration
            @endif

            @if ($view_current_page == 'Patient')
                </strong>
            @endif
        </a>
        <a href="/account/practitioner-registration" class="list-group-item">
            @if ($view_current_page == 'Practitioner')
                <strong>
            @endif

            @if (count($unapprovedPractitionerRegistrationList))
                Practitioner Registration ({{ count($unapprovedPractitionerRegistrationList) }})
            @else
                Practitioner Registration
            @endif

            @if ($view_current_page == 'Practitioner')
                </strong>
            @endif
        </a>
        <a href="/account/admin-orders" class="list-group-item">
            @if ($view_current_page == 'Order')
                <strong>
            @endif

            @if (count($newOrderList))
                Order Management ({{ count($newOrderList) }})
            @else
                Order Management
            @endif

            @if ($view_current_page == 'Order')
                </strong>
            @endif
        </a>
        <a href="/account/logout" class="list-group-item">Logout</a>
    </div>

</div>