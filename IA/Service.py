from fastapi import FastAPI
from cycle_db import DocumentType
import chromadb as PersistentClient
import os
PDF_type = "PDF"
Json_type ="JSON" 
app = FastAPI()
class CycleData(PersistentClient):
   tipo:str
   nome:str
   chunck:int
   overlap:int
   def __init__(self):
       
       self.db = PersistentClient(os.path.dirname(__file__))


#JSON
# json =
def encode_cycle_data(type:str):
    if type == PDF_type:
        return DocumentType.PDF


cmd_dir = os.path_dirname(__file__)
client = chromadb.PersistentClient(os.path.join()) 

apt_get("*/Items__object/{item.id}")

async def root(item_id):
      #return "item":item_id
      i =0

class CycleQuery():
      #colletion_name =
      k=9
class DocumentStore():
      __client = None
      pdf = 1
      doc = 2
      DIR_PATH = os.path.dirname(__name__) 
      DB_PATH = os.path.dirname(__file__)

      def __init__(self,client: cdb.Client() ->None):
          self.client = client
          #splitter = RicorsiveCharacterSplitter
          #doc_type =
          #if 

@app.get("")
async def root(self):
      if client is None:
         get_client(self.DB_PATH)



# bc_data = json.load(data)
# counter = 0
# colletion = []
# docs = []
# docs.append(page_content)

# for s in Sqllite:
#     collection.add()





def init_client(self,db_path:str) -> chromadb.Client:
    prodotti ="./login"
    self.client = db.PersistentClient(db_path)

def get_client(self):
    return self.client

def load_db(doc):
    API = FastAPI()

def load_document(self):
    
    if data.type == Json_type:
       self.doc = CycleData(client)
# apt_post()
    return {"message":"ok"}

@app.post("")
#response

