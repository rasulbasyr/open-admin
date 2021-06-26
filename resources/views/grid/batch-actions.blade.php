@if(!$holdAll)
<div class="btn-group {{ $all }}-btn d-none">
    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="selected hidden-xs" data="{{ trans('admin.grid_items_selected') }}"></span>
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    @if(!$actions->isEmpty())
    <ul class="dropdown-menu" role="menu">
        @foreach($actions as $action)
            @if($action instanceof \OpenAdmin\Admin\Actions\BatchAction)
                <li>{!! $action->render() !!}</li>
            @else
                <li><a href="#" class="{{ $action->getElementClass(false) }} dropdown-item">{!! $action->render() !!} </a></li>
            @endif
        @endforeach
    </ul>
    @endif
  </div>
@endif