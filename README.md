# aht_dec

## Pagination

![oagination](image-2.png)

Để hiển thị phần trên thì số bài viết phải lớn hơn số bài mỗi trangtrang

![read setting](image-1.png)

## Truyền tham số

printf('&lt;h1>&lt;a href="%1$s" title="%2$s">%3$s</a></h1>',
get_bloginfo( 'url' ),
get_bloginfo( 'description' ),
get_bloginfo( 'sitename' )
);

## Thêm chức năng Post Format

Chức năng Post Format nghĩa là chúng ta có thể tùy biến việc hiển thị post theo các định dạng như Video, Image, Gallery, Quote...

![post format](image.png)
