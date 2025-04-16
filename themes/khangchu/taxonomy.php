<?php
$taxonomy = '';
$term = get_queried_object();

if (is_tax('tintuc')) {
    get_template_part('taxnomy/taxnomy', 'tintuc');
}
elseif (is_tax('tuyensinh')) {
    get_template_part('taxnomy/taxnomy', 'tuyensinh');
}
elseif (is_tax('sinhvien')) {
    get_template_part('taxnomy/taxnomy', 'sinhvien');
}
else {
    get_template_part('post/single', 'default');
}
?>
