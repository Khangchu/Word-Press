<?php 
if (has_term('', 'tintuc')) { 
    get_template_part('/post/single', 'tin-tuc'); 
} 
else if (has_term('', 'tuyensinh')) { 
    get_template_part('/post/single', 'tuyen-sinh'); 
}
else {
    get_template_part('post/single', 'default'); 
}
?>
