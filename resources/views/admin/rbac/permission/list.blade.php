@extends('layouts.dashboard')
@section('title', '后台管理首页')

@section('home')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">文章列表</div>
                </div>
                @foreach (['primary' => '提示', 'secondary' => '提示', 'success' => '成功', 'warning' => '警告', 'danger' => '注意'] as $msg => $desc)
                  @if(session()->has($msg))
                    <div class="am-panel am-panel-{{ $msg }}">
                        <div class="am-panel-hd">{{ $desc }}</div>
                        <div class="am-panel-bd" style="color:green; background-color:#ccc">{{ session()->get($msg) }}</div>
                    </div>
                  @endif
                @endforeach



                <div class="widget-body  am-fr">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{{ route('rbac.permission.create') }}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="am-form-group tpl-table-list-select">
                            <select data-am-selected="{btnSize: 'sm'}">
                              <option value="option1">所有类别</option>
                              <option value="option2">IT业界</option>
                              <option value="option3">数码产品</option>
                              <option value="option3">笔记本电脑</option>
                              <option value="option3">平板电脑</option>
                              <option value="option3">只能手机</option>
                              <option value="option3">超极本</option>
                            </select>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input type="text" class="am-form-field ">
                            <span class="am-input-group-btn">
                              <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                            </span>
                        </div>
                    </div>

                    <div class="am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>权限显示名称</th>
                                    <th>父权限ID</th>
                                    <th>时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($lists as $list)
                                <tr class="even gradeC">
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->display_name }}</td>
                                    <td>{{ $list->pid }}</td>
                                    <td>{{ $list->updated_at }}</td>
                                    <td>
                                        <div class="tpl-table-black-operation">
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="javascript:;" class="tpl-table-black-operation-del">
                                                <i class="am-icon-trash"></i> 删除
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                              @endforeach
                                <!-- more data -->
                            </tbody>
                        </table>
                    </div>
                    <div class="am-u-lg-12 am-cf">

                        <div class="am-fr">
                            <ul class="am-pagination tpl-pagination">
                                <li class="am-disabled"><a href="#">«</a></li>
                                <li class="am-active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
