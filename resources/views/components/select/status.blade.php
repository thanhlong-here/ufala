<select name="status" class="form-control">
  @foreach ([
    'all' => __('Tất cả trạng thái'),
    'publish' => __('Xuất bản'),
    'draft'   => __('Bảng nháp')
    ] as $sta => $name)
  <option value="{{ $sta }}">
    {{  $name  }}
  </option>
  @endforeach
</select>
