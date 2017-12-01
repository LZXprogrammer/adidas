@extends('layout.index')

@section('title')
用户列表
@endsection

@section('content')
<div id="invalid" class="block-area">
    <h3 class="block-title">管理员添加</h3>
    <form action="{{ route('admin.rbac.user.store') }}" method="post" class="form-validation-2" role="form">
    {{csrf_field()}}

        <div class="form-group">
            <label></label>
            <input type="text" name="name" placeholder="请输入角色名" class="input-sm form-control">
        </div>

        <div class="form-group">
            <label></label>
            <input type="text" name="display_name" placeholder="请输入角色显示名" class="input-sm form-control" value="">
        </div>

        <div class="form-group">
            <label>请选择权限</label>
        </div>
        
        <input type="submit" value="添加" class="btn btn-sm">
        <!-- <button class="btn btn-sm validation-clear">CLOSE PROMPTS</button> -->
    </form>
</div>
@endsection
