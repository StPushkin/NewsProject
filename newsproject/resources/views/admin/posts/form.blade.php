<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="article_title" type="article_title" id="article_title" value="{{ isset($post->article_title) ? $post->article_title : ''}}" >
    {!! $errors->first('article_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_text') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="article_text" type="textarea" id="article_text" >{{ isset($post->article_text) ? $post->article_text : ''}}</textarea>
    {!! $errors->first('article_text', '<p class="help-block">:message</p>') !!}
</div>

 <select  name="article_category_id" id="" >
            @foreach($cate as $cat)
           
                <option  >{{$cat->id}}){{$cat->category_name}}</option> 
               
           
               
            @endforeach 
            </select>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
