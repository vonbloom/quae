<?php if  ($this->params['action'] != 'admin_dashboard'):?>
    <div class="navbar">
        <ol class="breadcrumb pull-left">
        <?php
        	if ($this->params['controller'] == 'products') {
        		$key = "products";
        		echo $this->Html->tag('li', $this->Html->link(__('Products'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'sections') {
        		$key = "sections";
        		echo $this->Html->tag('li', $this->Html->link(__('Sections'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
//        	} elseif ($this->params['controller'] == 'pictures') {
//        		$key = "pictures";
//         		if (isset($this->params['pass'][0])) {
//         			echo $this->Html->tag('li', $this->Html->link(__('Works'), array('controller' => 'works', 'action' => 'index')));
//         			if (isset($this->data['Picture']['parent_id'])) {
//         				echo $this->Html->tag('li', $this->Html->link(__('Pictures'), array('controller' => $key, 'action' => 'index',$this->data['Picture']['parent_id'])));
//         			} else {
//         				echo $this->Html->tag('li', $this->Html->link(__('Pictures'), array('controller' => $key, 'action' => 'index',$this->params['pass'][0])));
//         			}
//         		} else {
//        		echo $this->Html->tag('li', $this->Html->link(__('Pictures'), array('controller' => $key, 'action' => 'index')));
//         		}
//        		if ($this->params['action'] == 'admin_edit') {
//        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
//        		} elseif ($this->params['action'] == 'admin_add') {
//        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
//        		}
        	} elseif ($this->params['controller'] == 'users') {
        		$key = "users";
        		echo $this->Html->tag('li', $this->Html->link(__('Users'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'posts') {
        		$key = "posts";
        		echo $this->Html->tag('li', $this->Html->link(__('Posts'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'releases') {
        		$key = "releases";
        		echo $this->Html->tag('li', $this->Html->link(__('Releases'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'families') {
        		$key = "families";
        		echo $this->Html->tag('li', $this->Html->link(__('Families'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'areas') {
        		$key = "areas";
        		echo $this->Html->tag('li', $this->Html->link(__('Areas'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'tags') {
        		$key = "tags";
        		echo $this->Html->tag('li', $this->Html->link(__('Tags'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'recipes') {
        		$key = "recipes";
        		echo $this->Html->tag('li', $this->Html->link(__('Recipes'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'languages') {
        		$key = "languages";
        		echo $this->Html->tag('li', $this->Html->link(__('Languages'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'customers') {
        		$key = "customers";
        		echo $this->Html->tag('li', $this->Html->link(__('Customers'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	} elseif ($this->params['controller'] == 'works' || $this->params['controller'] == 'pictures') {
        		$key = "works";
        		echo $this->Html->tag('li', $this->Html->link(__('Works'), array('controller' => $key, 'action' => 'index')));
        		if ($this->params['controller'] == 'pictures') {
        			echo $this->Html->tag('li', $this->Html->link(__('Pictures'), array('controller' => 'pictures', 'action' => 'index', $this->params['pass'][0])));
        		}
        		if ($this->params['action'] == 'admin_edit') {
        			echo $this->Html->tag('li', $this->Html->link(__('Edit'), array('controller' => $key, 'action' => 'edit', $this->params['pass'][0])));
        		} elseif ($this->params['action'] == 'admin_add') {
        			echo $this->Html->tag('li', $this->Html->link(__('Add'), array('controller' => $key, 'action' => 'add')));
        		}
        	}
        ?>
        </ol>
        
        <?php
        	if ($this->params['controller'] == 'products') {
        		if ($this->params['action'] == 'admin_index') {
	        		echo $this->Html->link(
			        		$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New product'),
			        		array('controller' => 'products', 'action' => 'add'),
			        		array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New product'))
			        		);
        			      
        		} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this product'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this product')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
					
				}
        	} elseif ($this->params['controller'] == 'sections') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New section'),
							array('controller' => 'sections', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New section'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this section'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this section')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'pictures') {
        		if ($this->params['action'] == 'admin_index') {
					if (isset($this->params['pass'][0])) {
						echo $this->Html->link(
								$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New picture'),
								array('controller' => 'pictures', 'action' => 'add', $this->params['pass'][0]),
								array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New Picture'))
						);
					} else {
						echo $this->Html->link(
								$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New picture'),
								array('controller' => 'pictures', 'action' => 'add'),
								array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New picture'))
						);

					}	
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this picture'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this picture')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'users') {
        		if ($this->params['action'] == 'admin_index' && $userId == 1) {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New user'),
							array('controller' => 'users', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New user'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit' && $userId == 1 && $this->params['pass'][0] != 1) {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this user'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this user')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'posts') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New post'),
							array('controller' => 'posts', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New post'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this post'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this post')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'releases') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New release'),
							array('controller' => 'releases', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New release'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this release'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this release')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'families') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New family'),
							array('controller' => 'families', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New family'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this family'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this family')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'areas') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New area'),
							array('controller' => 'areas', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New area'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this area'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this area')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'tags') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New tag'),
							array('controller' => 'tags', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New tag'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this tag'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this tag')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'recipes') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New recipe'),
							array('controller' => 'recipes', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New recipe'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this recipe'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this recipe')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'languages') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New language'),
							array('controller' => 'languages', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New language'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this language'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this language')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'customers') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New dealer'),
							array('controller' => 'customers', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New dealer'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this dealer'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this dealer')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	} elseif ($this->params['controller'] == 'works') {
        		if ($this->params['action'] == 'admin_index') {
					echo $this->Html->link(
							$this->Html->tag('i','', array('class' => 'icon-plus icon-white')).' '.__('New work'),
							array('controller' => 'works', 'action' => 'add'),
							array('escape' => false, 'class' => 'btn btn-success pull-right', 'title' => __('New work'))
					);
						
				} elseif ($this->params['action'] == 'admin_edit') {
					echo $this->Form->postLink(
							$this->Html->tag('i','', array('class' => 'icon-trash icon-white')).' '.__('Delete this work'),
							array('action' => 'delete', $this->params['pass'][0]),
							array('escape' => false, 'class' => 'btn btn-danger pull-right', 'title' => __('Delete this work')),
							__('Are you sure you want to delete # %s?', $this->params['pass'][0])
					);
						
				}
        	}
        ?>
		
	    </div>
	<?php endif; ?>