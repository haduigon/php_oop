{extends file="layout.tpl"}
{block name=body}


    <form  method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="!!!example@email.com">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-success" value="Create">
        <a href="index.tpl"><input type="submit" class="btn btn-success" value="LOGIN"></a>
    </form>


{/block}