@extends('layouts.dashboard')
@section('title', '添加管理员权限')

@section('home')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">添加管理员权限</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form method="post" action="{{ route('rbac.permission.store') }}" class="am-form tpl-form-border-form tpl-form-border-br">
                        {{csrf_field()}}

                        <div class="am-form-group">
                            <label for="name" class="am-u-sm-3 am-form-label">权限名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="name" class="tpl-form-input" placeholder="请输入权限名">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="display_name" class="am-u-sm-3 am-form-label">权限显示名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="display_name" class="tpl-form-input" placeholder="请输入权限显示名称">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label  class="am-u-sm-3 am-form-label">作者</label>
                            <div class="am-u-sm-9">
                                <select name="pid" data-am-selected="{searchBox: 2}">
                                  <option value="0">顶级权限</option>
                                  @foreach($top_perms as $top_perm)
                                    <option value="{{$top_perm->id}}">{{$top_perm->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="description" class="am-u-sm-3 am-form-label">描述</label>
                            <div class="am-u-sm-9">
                                <textarea class="" rows="10" name="description" placeholder="请输入描述内容"></textarea>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
