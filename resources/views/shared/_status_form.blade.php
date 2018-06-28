<form action="{{route('statuses.store')}}" method="post">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea name="content" class="form-control" placeholder="聊聊新鲜事。。。" rows="3"></textarea>
    <button tyep="submit" class="btn btn-primary pull-right">发布</button>
</form>