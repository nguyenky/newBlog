angular.module('app')
    .config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
        $ocLazyLoadProvider.config({
            debug: true,
            events: true,
            modules: [
                {
                    name: 'uiboostrap',
                    files: [
                        // 'node_modules/angular-ui-bootstrap/dist/ui-bootstrap-csp.css',
                        'node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js',
                        
                    ]
                },
                {
                    name: 'cropimage',
                    files: [
                        'node_modules/ng-file-upload/dist/ng-file-upload.js',
                        'node_modules/ng-file-upload/dist/ng-img-crop.js',
                    ]
                },
                {
                    name: 'toastr',
                    files: [
                        'node_modules/angular-toastr/dist/angular-toastr.css',
                        'node_modules/angular-toastr/dist/angular-toastr.tpls.js',

                    ]
                },
                {
                    name: 'paginate',
                    files: [
                        'node_modules/angular-utils-pagination/dirPagination.js',
                    ]
                },
                {
                    name: 'treeview',
                    files: [
                        'node_modules/angular-treeview/tree-control-attribute.css',
                        'node_modules/angular-treeview/tree-control.css',
                        'node_modules/angular-treeview/angular-tree-control.js',
                    ]
                },
                {
                    name: 'select',
                    files: [
                        'node_modules/angular-sanitize/angular-sanitize.js',
                        'node_modules/ui-select/dist/select.css',
                        'node_modules/ui-select/dist/select.js',
                    ]
                },
                {
                    name: 'dropzone',
                    files: [
                        'node_modules/ngdropzone/dist/ng-dropzone.min.js',
                        'node_modules/ngdropzone/dist/ng-dropzone.min.css',
                    ]
                },
                {
                    name: 'summernote',
                    files: [
                        'bower_components/summernote/dist/summernote.min.js',
                    ]
                }
            ]
        });
    }]);