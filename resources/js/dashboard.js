new DataTable('#recordTable', {
    processing: true,
    serverSide: true,
    ajax: window.route,
    columns: [
        {data: 'id', name: 'id', searchable: true},
        {data: 'string', name: 'string', className: 'truncate-text', searchable: true},
        {data: 'text', name: 'text', className: 'truncate-text', searchable: true},
        {data: 'json', name: 'json', className: 'truncate-text', searchable: true},
        {data: 'boolean', name: 'boolean', searchable: true},
        {data: 'integer', name: 'integer', searchable: true},
        {data: 'float', name: 'float', searchable: true},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});