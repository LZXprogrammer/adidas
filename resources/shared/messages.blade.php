@foreach (['primary' => '提示', 'secondary' => '提示', 'success' => '成功', 'warning' => '警告', 'danger' => '注意'] as $msg => $desc)
  @if(session()->has($msg))
    <div class="am-panel am-panel-{{ $msg }}">
        <div class="am-panel-hd">{{ $desc }}</div>
        <div class="am-panel-bd">{{ session()->get($msg) }}</div>
    </div>
  @endif
@endforeach
