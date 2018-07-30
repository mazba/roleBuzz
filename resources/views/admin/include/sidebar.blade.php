<?php /**
 * Created by Mazba.
 * User: mazba
 * Date: 2/20/18
 * Time: 10:39 AM
 */?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Role Buzz <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0">Administrator</p>
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
                $menus = \App\Model\Role\SysMenu::all()->toArray();
                echo buildAndPrintTree($menus,$group_roles);
                ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
<?php
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

