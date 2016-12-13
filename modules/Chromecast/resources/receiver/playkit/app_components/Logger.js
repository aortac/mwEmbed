var Logger = (function () {
    var instance;

    function createInstance( debugMode ) {
        return new LoggerManager( debugMode );
    }

    function LoggerManager( debugMode ) {
        this.debugMode = debugMode;
    }

    LoggerManager.prototype.log = function ( comp, msg, opt_data ) {
        this.writeToConsole_( 'log', comp, msg, opt_data );
    };

    LoggerManager.prototype.error = function ( comp, msg, opt_data ) {
        this.writeToConsole_( 'error', comp, msg, opt_data );
    };

    LoggerManager.prototype.info = function ( comp, msg, opt_data ) {
        this.writeToConsole_( 'info', comp, msg, opt_data );
    };

    LoggerManager.prototype.writeToConsole_ = function ( method, comp, msg, opt_data ) {
        if ( !this.debugMode ) {
            return;
        }
        var msg_array = this.getMessage_( comp, msg, opt_data );
        switch ( method ) {
            case 'log':
                console.log( msg_array[ 0 ], " | ", msg_array[ 1 ] );
                break;
            case 'error':
                console.error( msg_array[ 0 ], " | ", msg_array[ 1 ] );
                break;
            case 'info':
                console.info( msg_array[ 0 ], " | ", msg_array[ 1 ] );
                break;
        }
    };

    LoggerManager.prototype.getMessage_ = function ( comp, msg, opt_data ) {
        if ( !opt_data ) {
            opt_data = 'NO_DATA';
        }
        return [ "[RECEIVER-APP] ### " + comp + ": " + msg, opt_data ];
    };

    return {
        getInstance: function ( debugMode ) {
            if ( !instance ) {
                instance = createInstance( debugMode );
            }
            return instance;
        }
    };
})();

