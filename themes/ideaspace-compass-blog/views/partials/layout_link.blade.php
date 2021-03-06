<a-rounded
    id="post-link-wrapper2-{{ $id }}-{{ $blog_post['post-text-' . $id]['#content-id'] }}"
		@if ($position['x'] == -3) 
    position="{{ ($position['x'] - 0.001) }} 0 {{ $position['z'] }}"
		@else
    position="{{ $position['x'] }} 0 {{ $position['z'] }}"
		@endif
    color="#0080e5"
    class="collidable"
    visible="false"
    rotation="0 {{ $rotation_y }} 0"
    width="2"
    height="0.5"
    top-left-radius="0.06"
    top-right-radius="0.06"
    bottom-left-radius="0.06"
    bottom-right-radius="0.06">		
</a-rounded>
<a-rounded
		id="post-link-wrapper-{{ $id }}-{{ $blog_post['post-text-' . $id]['#content-id'] }}"
		isvr-link-hover="id: post-link-wrapper2-{{ $id }}-{{ $blog_post['post-text-' . $id]['#content-id'] }}"
		position="{{ $position['x'] }} 0 @if ($position['z'] < 0) {{ ($position['z'] + 0.001) }} @else {{ ($position['z'] - 0.001) }} @endif"
    rotation="0 {{ $rotation_y }} 0"
		color="{{ $blog_post['post-text-image-background-color-' . $id]['#value'] }}"
    class="collidable"
		width="1.95"
		height="0.45"
		top-left-radius="0.06"
		top-right-radius="0.06"
		bottom-left-radius="0.06"
		bottom-right-radius="0.06">		
		<a-entity
				class="post-link collidable"
				position="0 0 0.001"
				@if (isset($blog_post['post-link-' . $id]['#value']) && trim($blog_post['post-link-' . $id]['#value']) != '')
				link="href: {{ $blog_post['post-link-' . $id]['#value'] }}; visualAspectEnabled: false"
				@endif
				material="shader: html; target: #post-link-{{ $id }}-texture-{{ $blog_post['post-link-' . $id]['#content-id'] }}; transparent: true; ratio: width"
				geometry="primitive: plane; width: 1.8">
		</a-entity>
</a-rounded>

