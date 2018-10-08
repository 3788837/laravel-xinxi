@extends('question.master_nav_footer')

@section('title', $data['question']->title . ' - Biecheng 别城')
@section('description', $data['question']->describes)
@section('keyword', $data['question']->keyword)

@section('css')
<style>
	body{ 
		margin:0; 
		height:100%;
	}	
	.content{
		height: auto;
		width: 80%;
		margin: auto;
		zoom:1;
		overflow:hidden;
	}
	.left{
		margin-top: 80px;
		width: 70%;
		float: left;
	}
	.right{
		margin-top: 80px;
		width: 27%;
		float: left;
		margin-left: 3%;
	}
	pre{
		background: #F6F6F6;
	}
	.tag{
		line-height: 22px;
		text-align: center;
		color: #017E66;
		background-color: rgba(1,126,102,0.08);
		
	}
	.tag:hover{
		color: white;
		background-color: #017E66;
	}
	.card-body{
		padding: 0.25rem;
	}
	.similar{
		padding: 0.25rem;
		margin-bottom: 0rem;
	}
	.similar li{
		padding: 0.25rem;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;		
	}
	.similar li a{
		color: #009a61;
	}
</style>
@endsection

@section('main')
	<div class="content">
		<div class="span8 left">
			<ul class="breadcrumb">
				<li>
					<a href="/">首页</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="/question/{{ $data['column']->cname }}">{{ $data['column']->name }}</a> <span class="divider">/</span>
				</li>
				<li class="active">{{ $data['question']->title }}</li>
			</ul>
			<li>
				@foreach($data['keywordArr'] as $arr)
				<a class="tag" href="/search?tag={{ $arr }}">{{ $arr }}</a>
				@endforeach
				<span style="color: #999;">{{ $data['question']->pageviews }}浏览</span>
			</li>
			<h3 class="text-center">{{ $data['question']->title }}</h3>
			<p>{!! $data['content']->content !!}</p>
		</div>
		<div class="span4 right">
			<div class="page-header">
				<div class="container">
				  <div class="card">
				    <div class="card-header">相似问题</div>
				    <div class="card-body">
				    	<ul class="similar">
				    		@foreach($data['similarQuestionArr'] as $s)
				    		<li><a href="/q/{{ $s['id'] }}">{{ $s['title'] }}</a></li>
				    		@endforeach
				    	</ul>
				    </div> 
				  </div>
				</div>				
			</div>
		</div>
	</div>
@endsection

@section('js')
@endsection
