@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('orderings::orderings.title.orderings') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i
                        class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('orderings::orderings.title.orderings') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.orderings.ordering.create') }}" class="btn btn-primary btn-flat"
                       style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('orderings::orderings.button.create ordering') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>
                                {{--<th>{{ trans('core::core.table.created at') }}</th>--}}
                                <th>Song Id</th>
                                <th>Order 1</th>
                                <th>Order 2</th>
                                <th>Order 3</th>
                                <th>Order 4</th>
                                <th>Order 5</th>
                                <th>Order 6</th>
                                <th>Order 7</th>
                                <th>Order 8</th>
                                <th>Created at</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($orderings)): ?>
                            <?php foreach ($orderings as $ordering): ?>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->story_id }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order1 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order2 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order3 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order4 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order5 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order6 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order7 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->order8 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}">
                                        {{ $ordering->created_at }}
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.orderings.ordering.edit', [$ordering->id]) }}"
                                           class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal"
                                                data-target="#modal-delete-confirmation"
                                                data-action-target="{{ route('admin.orderings.ordering.destroy', [$ordering->id]) }}">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                            {{--                            <tr>
                                                            <th>{{ trans('core::core.table.created at') }}</th>
                                                            <th>{{ trans('core::core.table.actions') }}</th>
                                                        </tr>--}}
                            </tfoot>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('orderings::orderings.title.create ordering') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).keypressAction({
                actions: [
                    {key: 'c', route: "<?= route('admin.orderings.ordering.create') ?>"}
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[0, "desc"]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>
@endpush
