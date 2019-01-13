@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('results::results.title.results') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i
                        class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('results::results.title.results') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.results.result.create') }}" class="btn btn-primary btn-flat"
                       style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('results::results.button.create result') }}
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
                                <th>Story Id</th>
                                <th>Result 1</th>
                                <th>Result 2</th>
                                <th>Result 3</th>
                                <th>Result 4</th>
                                <th>Result 5</th>
                                <th>Result 6</th>
                                <th>Result 7</th>
                                <th>Result 8</th>
                                <th>Created at</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($results)): ?>
                            <?php foreach ($results as $result): ?>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->story_id }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result1 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result2 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result3 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result4 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result5 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result6 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result7 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->result8 }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.results.result.edit', [$result->id]) }}">
                                        {{ $result->created_at }}
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.results.result.edit', [$result->id]) }}"
                                           class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal"
                                                data-target="#modal-delete-confirmation"
                                                data-action-target="{{ route('admin.results.result.destroy', [$result->id]) }}">
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
        <dd>{{ trans('results::results.title.create result') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).keypressAction({
                actions: [
                    {key: 'c', route: "<?= route('admin.results.result.create') ?>"}
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
