@if ($crud->hasAccess('show'))
    <a href="{{route('show_registrations_statistics' , 1)}} " class="btn btn-xs btn-default"><i class="fa fa-ban"></i> {{trans('global.buttons.show_registrations_statistics')}}</a>
@endif
