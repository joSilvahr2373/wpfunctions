function create_post_types($post = null, $singular_name = null, $plural_name = null, $description = null){

  register_post_type( $post,
		array(
			'labels' => array(
				'name'                  => __( $post, $post),
				'singular_name'         => __( $singular_name,$singular_name),
				'menu_name'             => __( $post,$post),
				'name_admin_bar'        => __( $singular_name ,$singular_name),
				'all_items'             => __( 'Todos os itens',$singular_name),
				'add_new_item'          => __( 'Adicionando novo item de '.$singular_name, $singular_name),
				'add_new'               => __( 'Adicionar novo item de '.$singular_name, $singular_name),
				'new_item'              => __( 'Novo Item,',$singular_name),
				'edit_item'             => __( 'Editar Item',$singular_name),
				'update_item'           => __( 'Update Item',$singular_name),
				'view_item'             => __( 'Ver Item',$singular_name),
				'view_items'            => __( 'Ver Items',$singular_name),
				'search_items'          => __( 'Procurar Item',$singular_name),
				),
      'description' => $description,
			'public' => true,
			'supports' => array( 'title', 'editor', 'custom-fields' , 'thumbnail', 'excerpt', 'comments' ),
			// 'taxonomies' => array( 'category', 'post_tag' ),
			// 'has_archive' => true,
      //       'menu_icon' => 'dashicons-welcome-write-blog',
      //       'menu_position'      => 5,
      //       'rewrite' => array('slug' => 'artigo'),

			)
		);
}
add_action( 'init', 'post_type_comunicados' );
function post_type_comunicados(){
  return create_post_types("comunicado", "Comunicado", "Comunicados", "Criando comunicados para os associados");
}
