-module(key_value).
-behaviour(gen_server).
-define(VERSION, 0.01).

% Simple gen_server


-export([start/0, set/2, get/1, version/0]).
-export([init/1, handle_call/3, handle_cast/2,
         handle_info/2, terminate/2, code_change/3]).

% vvvv API vvvv

start() ->
  gen_server:start_link({global, ?MODULE}, ?MODULE, [], []).

set(Key, Value) ->
  gen_server:call({global, ?MODULE}, { set, Key, Value }).

get(Key) ->
  gen_server:call({global, ?MODULE}, { get, Key }).

version() ->
  gen_server:call({global, ?MODULE}, { version }).

% vvvv Gen Server Implementation vvvv

init([]) ->
  State = dict:new(),
  {ok, State}.

handle_call({ set, Key, Value }, _From, State) ->
  NewState = dict:store(Key, Value, State),
  { reply, ok, NewState };

handle_call({ get, Key }, _From, State) ->
  Resp = dict:find(Key, State),
  { reply, Resp, State };

handle_call({ version }, _From, State) ->
  { reply, ?VERSION, State };

handle_call(_Message, _From, State) ->
  { reply, invalid_command, State }.

handle_cast(_Message, State) -> { noreply, State }.
handle_info(_Message, State) -> { noreply, State }.
terminate(_Reason, _State) -> ok.
code_change(_OldVersion, State, _Extra) -> { ok, State }.