<?php /**
 * Created by Mazba.
 * User: mazba
 * Date: 2/20/18
 * Time: 10:39 AM
 */?>
<!-- ========== Left Sidebar Start ========== -->
<?php
$user = \Illuminate\Support\Facades\Auth::user();
?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <?php
                $user_image = $user['image'];
                if(empty($user_image)||!file_exists(public_path($user_image)))
                    $user_image = 'img/default-avatar.jpeg'
                ?>
                <img src="{{url($user_image)}}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{$user['full_name']}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('logout')}}"><i class="md md-settings-power"></i>{{__('Logout')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <?php
                $user_group_id = Auth::user()->sys_group_id;
                $group_roles = getRolesByGroupId($user_group_id);
                $group_roles = $group_roles->toArray();
                $group_roles = array_column($group_roles,'uri');
                $menus = \App\Model\Role\SysMenu::where('status',1)->orderBy('order')->get()->toArray();
                $tree = buildTree($menus,$group_roles);
                print_tree_menu($tree);
                ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
<?php
function print_tree_menu($menus,$self=false){
foreach ($menus as $menu)
{
if(!isset($menu['sub_menu']))
{
$is_active = $menu['url']==request()->route()->uri?'active':'';
?>
<li class="{{$is_active}}" >
    <a href="{{url($menu['url'])}}" class="waves-effect {{$is_active}}"><i class="{{$menu['icon']}}"></i><span>{{$menu['title']}} </span></a>
</li>
<?php
}
else
{
?>
<li class="has_sub">
    <a href="javascript:;" class="waves-effect" title="{{$menu['alt_title']}}"><i class="{{$menu['icon']}}"></i><span>{{$menu['title']}}</span><span class="arrow"></span></a>
    <ul>
        <?php
        print_tree_menu($menu['sub_menu'],true)
        ?>
    </ul>
</li>
<?php
}
?>

<?php
}
if($self)
{
    return 0;
}
}


function buildAndPrintTree($tree,$group_roles,$parent=null){
    if(count($tree)>0){
        foreach ($tree as $key=>$node){
            if($node['parent_id']==$parent&&$node['status']==1){
                $url = $node['url'];
                $plus_sign = '';
                $is_active = $node['url']==request()->route()->uri?'active':'';
                if(empty($url)){
                    $url = 'javascript:void(0);';
                    $plus_sign='<span class="pull-right"><i class="md md-add"></i></span>';
                }
                elseif(filter_var($url, FILTER_VALIDATE_URL)==false)
                    $url = url($url);
                unset($tree[$key]);
                echo "<li class='$is_active'>";
                echo '<a title="'.$node['alt_title'].'" href="'.$url.'" class="waves-effect "><i class="'.$node['icon'].'"></i><span>'.$node['title'].'</span><span class="pull-right">'.$plus_sign.'</span></a>';
                echo '<ul>';
                buildAndPrintTree($tree,$group_roles,$node['id']);
                echo '</ul>';
                echo '</li>';
            }
        }
    }
}
?>

