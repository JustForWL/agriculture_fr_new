<?php $search_text = __( 'Search', 'tempera' ); ?> 
<form method="get" id="searchform"
action="<?php echo esc_url(home_url( '/' )); ?>/">
<input type="text" value="点击搜索"
name="s" id="s"
onblur="if (this.value == '')
{this.value = '点击搜索';}"
onfocus="if (this.value == '点击搜索')
{this.value = '';}" />
<input type="submit" id="searchsubmit" value="&#xe816;" />
</form>